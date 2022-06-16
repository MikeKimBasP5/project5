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
import Language from './compontent/Language';
import Oefening from './compontent/oefening';
import Oefeningen from './compontent/oefeningen';
import Over from './compontent/over';
import Settings from './compontent/settings';

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
        component={Settings}
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
        component={Instellingen}
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
        name='Exercises'
        component={Exercises} />
      <StackEN.Screen
        name='Exercise'
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
        name='Oefeningen'
        component={Oefeningen} />
      <StackNL.Screen
        name='Oefening'
        component={Oefening} />
    </StackNL.Navigator>
  )
}

const App = () => {
  return (
    <NavigationContainer theme={MyTheme}>
      <MyTabsEN />
    </NavigationContainer>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: 'white',
    alignItems: 'center',
  },
  header: {
    marginTop: 50,
    fontSize: 40,
    color: 'black',
  },
  text: {
    top: '10%',
    textAlign: 'center',
    color: 'black',
    fontSize: 30,
  },
  btn: {
    top: '20%',
    textAlign: 'center',
    color: 'black',
    backgroundColor: 'lightgray',
    padding: 5,
    width: 250,
    fontSize: 30,
  }
});

const MyTheme = {
  ...DefaultTheme,
  colors: {
    ...DefaultTheme.colors,
    primary: 'lightblue',
  },
};

export default App;