import { StyleSheet, Text, View } from 'react-native';
import { NavigationContainer, DefaultTheme } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import MaterialCommunityIcons from 'react-native-vector-icons/MaterialCommunityIcons';
import 'react-native-gesture-handler';
import About from './compontent/about';
import Exercise from './compontent/exercise';
import Exercises from './compontent/exercises';
import Instellingen from './compontent/instellingen';
import LanguageScreen from './compontent/Language';
import Oefening from './compontent/oefening';
import Oefeningen from './compontent/oefeningen';
import Over from './compontent/over';
import Settings from './compontent/settings';
import web from './compontent/web';

const TabNL = createMaterialBottomTabNavigator();
const TabEN = createMaterialBottomTabNavigator();
const StackNL = createStackNavigator();
const StackEN = createStackNavigator();

const MyTabsEN = () => {
  return (
    <TabEN.Navigator>
      <TabEN.Screen
        name="About"
        component={About}
        options={{
          headerShown: false,
          tabBarLabel: 'About',
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name="information-variant" color={color} size={24} />
          ),
        }}
      />
      <TabEN.Screen
        name="Exercises"
        component={StackInstructionEN}
        options={{
          tabBarLabel: 'Exercises',
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name="weight-lifter" color={color} size={24} />
          ),
        }}
      />
      <TabEN.Screen
        name="Settings"
        component={StackSettingsEN}
        options={{
          headerShown: false,
          tabBarLabel: 'Settings',
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name="cog" color={color} size={24} />
          ),
        }}
      />
    </TabEN.Navigator>
  );
}

const MyTabsNL = () => {
  return (
    <TabNL.Navigator>
      <TabNL.Screen
        name="Over"
        component={Over}
        options={{
          headerShown: false,
          tabBarLabel: 'Over',
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name="information-variant" color={color} size={24} />
          ),
        }}
      />
      <TabNL.Screen
        name="Oefeningen"
        component={StackInstructionNL}
        options={{
          tabBarLabel: 'Oefeningen',
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name="weight-lifter" color={color} size={24} />
          ),
        }}
      />
      <TabNL.Screen
        name="Instellingen"
        component={StackSettingsNL}
        options={{
          headerShown: false,
          tabBarLabel: 'Instellingen',
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name="cog" color={color} size={24} />
          ),
        }}
      />
    </TabNL.Navigator>
  );
}

const StackInstructionEN = () => {
  return (
    <StackEN.Navigator
      screenOptions={{
        headerShown: false
      }}>
      <StackEN.Screen
        name='ExercisesScreen'
        component={Exercises} />
      <StackEN.Screen
        name='ExerciseScreen'
        component={Exercise} />
    </StackEN.Navigator>
  )
}

const StackInstructionNL = () => {
  return (
    <StackNL.Navigator
      screenOptions={{
        headerShown: false
      }}>
      <StackNL.Screen
        name='OefeningenScreen'
        component={Oefeningen} />
      <StackNL.Screen
        name='OefeningScreen'
        component={Oefening} />
    </StackNL.Navigator>
  )
}
const StackSettingsNL = () => {
    return (
        <StackNL.Navigator
            screenOptions={{
                headerShown: false
            }}>
            <StackNL.Screen
                name='instellingen'
                component={Instellingen} />
            <StackNL.Screen
                name='web'
                component={web} />
        </StackNL.Navigator>
    )
}
const StackSettingsEN = () => {
    return (
        <StackEN.Navigator
            screenOptions={{
                headerShown: false
            }}>
            <StackEN.Screen
                name='settings'
                component={Settings} />
            <StackEN.Screen
                name='web'
                component={web} />
        </StackEN.Navigator>
    )
}
const AppEN = () => {
  return (
    <NavigationContainer theme={MyTheme}>
      <MyTabsEN />
    </NavigationContainer>
  );
}
const AppNL = () => {
  return (
    <NavigationContainer theme={MyTheme}>
      <MyTabsNL />
    </NavigationContainer>
  );
}

const MyTheme = {
  ...DefaultTheme,
  colors: {
    ...DefaultTheme.colors,
    primary: '#bfedef',
  },
};

export default AppEN;